<?php
//coded by Syahrul R.
system("clear");
echo "----------------------------\n";
echo "|- Tools name : HashTools  |\n";
echo "|- Author     : Syahrul R. |\n";
echo "|- version    : 1.0        |\n";
echo "----------------------------\n";
echo "Support by : https://bocah-programmer.xyz\n";
echo "\nMenu :\n";
echo "1. MD5\n";
echo "2. CRC32\n";
echo "3. SHA1\n";
echo "Input Your Choice : ";
$pilih = trim(fgets(STDIN));

if ($pilih == 1)
{
echo "Input yout words/password to hashing md5 : ";
$hash = trim(fgets(STDIN));
echo "------------------------\n";
echo "Result : ".md5($hash)."\n";
echo "------------------------\n";
}
else if ($pilih == 2)
{
echo "Input your words/password to hashing md4 : ";
$hash = trim(fgets(STDIN));
echo "------------------------\n";
echo "Result : ".crc32($hash)."\n";
echo "------------------------\n";
}
else if ($pilih == 3)
{
echo "Input your words/password to hashing sha1 : ";
$hash = trim(fgets(STDIN));
echo "------------------------\n";
echo "Result : ".sha1($hash)."\n";
echo "------------------------\n";
}
else {
echo "Your Input Invalid...!!!\n";
}
?>
