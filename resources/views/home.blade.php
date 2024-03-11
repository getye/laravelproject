@extends('layout')
@section('content')
<div style="padding: 20;" >
<h2 align="center">The Student Academic Support Process(SASP)</h2>
<h3 align="center">The University Registrar</h3>
<p align="justify" id="bb">
Wollo University is aware of its responsibility become an institution that contributes its 
share for the development of the nations economy through the advancement of 
service and technology. The University must play a major role in producing 
educated manpower that fulfill the current national and global market demand.
To meet these and other objectives, the university establishes 
organizational structure that enables to deliver quality and cost
 effect service to its customers conduct quality research that can
 promote scientific knowledge.
 C++ if, if...else and Nested if...else
In computer programming, we use the if...else statement to run one block of code under certain conditions and another block of code under different conditions.

For example, assigning grades (A, B, C) based on marks obtained by a student.

if the percentage is above 90, assign grade A
if the percentage is above 75, assign grade B
if the percentage is above 65, assign grade C
There are three forms of if...else statements in C++.

if statement
if...else statement
if...else if...else statement
C++ if Statement
The syntax of the if statement is:

if (condition) {
  // body of if statement
}
The if statement evaluates the condition inside the parentheses ( ).

If the condition evaluates to true, the code inside the body of if is executed.
If the condition evaluates to false, the code inside the body of if is skipped.
Note: The code inside { } is the body of the if statement.

Working of if Statement
How if Statement Works
Example 1: C++ if Statement
// Program to print positive number entered by the user
// If the user enters a negative number, it is skipped

#include <iostream>
using namespace std;

int main() {

  int number;

  cout << "Enter an integer: ";
  cin >> number;

  // checks if the number is positive
  if (number > 0) {
    cout << "You entered a positive integer: " << number << endl;
  }

  cout << "This statement is always executed.";

  return 0;
}
Run Code
Output 1
</p>
<br>
<p align="justify" id="bb">
Wollo University is aware of its responsibility become an institution that contributes its 
share for the development of the nations economy through the advancement of 
service and technology. The University must play a major role in producing 
educated manpower that fulfill the current national and global market demand.
To meet these and other objectives, the university establishes 
organizational structure that enables to deliver quality and cost
 effect service to its customers conduct quality research that can
 promote scientific knowledge.
 C++ if, if...else and Nested if...else
In computer programming, we use the if...else statement to run one block of code under certain conditions and another block of code under different conditions.

For example, assigning grades (A, B, C) based on marks obtained by a student.

if the percentage is above 90, assign grade A
if the percentage is above 75, assign grade B
if the percentage is above 65, assign grade C
There are three forms of if...else statements in C++.

if statement
if...else statement
if...else if...else statement
C++ if Statement
The syntax of the if statement is:

if (condition) {
  // body of if statement
}
The if statement evaluates the condition inside the parentheses ( ).

If the condition evaluates to true, the code inside the body of if is executed.
If the condition evaluates to false, the code inside the body of if is skipped.
Note: The code inside { } is the body of the if statement.

Working of if Statement
How if Statement Works
Example 1: C++ if Statement
// Program to print positive number entered by the user
// If the user enters a negative number, it is skipped

#include <iostream>
using namespace std;

int main() {

  int number;

  cout << "Enter an integer: ";
  cin >> number;

  // checks if the number is positive
  if (number > 0) {
    cout << "You entered a positive integer: " << number << endl;
  }

  cout << "This statement is always executed.";

  return 0;
}
Run Code
Output 1
</p>
</div>
@endsection