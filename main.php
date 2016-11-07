<?php

require_once('./constants.php');

$array = [

	ANIMAL => 'animal',
	NAME => 'name',
	'one' => ONE,
	'two' => TWO

];

$result = $array['one'] * $array['two'];

echo "The result of " . $array['one'] . " * " . $array['two']. " is: " . $result;

$first_name = "Thomas";
$age = "31";
$job_1 = "Bus Driver";
$job_2 = "Plumbers Helper";
$job_3 = "Software Engineer";

$paragraphs = <<<BEGIN

My first name is $first_name and
my age is $age.  I have had many
different jobs.

I used to be a $job_1 as well as
a $job_2 and now I am a $job_3. Each of
these jobs present unique challenges.

Though I have had many jobs in
the past, I believe I will continue
to be a $job_3.

BEGIN;

echo $paragraphs;