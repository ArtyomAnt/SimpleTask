1. Sum of array element within given range:
In this exercise we're working with an array of 10 integers, as follows: [10, 20, 30, 40,
50, 60, 70, 80, 90, 100]. 0 is the first index and 9 is the last index of the array.
Write a function that receives two integers as parameters. The function returns the
sum of the elements in the array found between those two integers.
For example, if we use 30 and 60 as parameters, the function should return 180. A few additional requirements:
● The two integers passed to the function should be positive; if not, the function should return -1.
● Validate that the first integer is lower than the second integer. If not, the function should return 0.
● If the first integer is in the array, and the second is above 100, for example 90 and 120, then the function should return the sum of those integers that are within the array and in between the range given. In this case, that would be 190.
● If both integers are not found in the array, for example 110 and 120, the function should return 0.



2. Letter count and print *
Write a class and implement a static method
which receives a string parameter and returns a string that
shows how many times each letter shows up in the string by using an asterisk (*)
.
The return string should include only the letters. There should be no spaces in the output and the letters must be separated by a comma (,) as shown in the example below.
The return string must list the letters in order of their first appearance in the original string. All letters in the return string must be lowercase.
Examples
LetterCounter
CountLettersAsString

LetterCounter::CountLettersAsString("TestGorilla")

`"t:**,e:*,s:*,g:*,o:*,r:*,i:*,l:**,a:*`


LetterCounter::CountLettersAsString("INTERVIEW")

`"i:**,n:*,t:*,e:**,r:*,v:*,w:*`

