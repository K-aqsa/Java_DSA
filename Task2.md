# TASK 2 : 4/07/2023

### 1. Write a program to input two numbers(A & B) from user and print the maximum element among A & B in each line.
#### Input Format
First line is a single integer A. Second line is a single integer B.
#### Constraints
1 <= A <= 1000000
1 <= B <= 1000000
#### Output Format
One line containing the greater integer A or B.
#### Sample Input 0
````
5 
6
````
#### Sample Output 0
````
6
````

#### CODE
````
import java.io.*;
import java.util.*;

public class Solution {
    public static void main(String[] args) {

        Scanner sc = new Scanner(System.in);
        int a = sc.nextInt();
        int b = sc.nextInt();

        System.out.println((a>b)?a:b);      
    }
}
````

### 2. Write a program to input three numbers(A, B & C) from user and print the maximum element among A, B & C in each line.
#### Input Format
First line is a single integer A. Second line is a single integer B. Third line is a single integer C.
#### Constraints
1 <= A <= 1000000
1 <= B <= 1000000
1 <= C <= 1000000
#### Output Format
One line containing an integer as per the question.
#### Sample Input 0
````
5 
6 
7
````
#### Sample Output 0
````
7
````

#### CODE
````
import java.io.*;
import java.util.*;

public class Solution {
    public static void main(String[] args) {

        Scanner sc=new Scanner(System.in);
        int a=sc.nextInt();
        int b=sc.nextInt();
        int c=sc.nextInt();

        if(a>b && a>c){
            System.out.println(a);
        }
        else if(b>a && b>c){
            System.out.println(b);
        }
        else{
            System.out.println(c);
        }
    }
}
````

### 3. Write a program to calculate the percentage (according to marks of a student) and grade (according to the percentage of a student). Five numbers(A, B, C, D & E) represent the marks of a student in 5 subjects which are out of 100. Print the percentage and the grade of the student.If percentage >= 90% : Grade A If percentage >= 80% but <90 : Grade B If percentage >= 70% but <80: Grade C If percentage >= 60% but <70: Grade D If percentage >= 40% but <60: Grade E If percentage < 40%: Grade F
#### NOTE: You have to take the lowest integer of the percentage. E.g. 90.8% will be treated as 90%.
#### Input Format
There will be five lines of inputs as following: The five lines contain the 5 subject marks of the student in numerical format.
#### Constraints
NA
#### Output Format
The first line indicates the percentage in integer format. The next line displays the grade in string format.
#### Sample Input 0
````
50
60
70
80
90
````
#### Sample Output 0
````
70
C
````

### CODE
````
import java.io.*;
import java.util.*;

public class Solution {
    public static void main(String[] args) {

        float totalMarks=0, p;
        Scanner sc = new Scanner(System.in);
        int a=sc.nextInt();
        int b=sc.nextInt();
        int c=sc.nextInt();
        int d=sc.nextInt();
        int e=sc.nextInt();

        totalMarks = a+b+c+d+e;
        p = (totalMarks / 500) * 100;

        System.out.println((int)p);

        if(p>=90){
            System.out.println("A");
        }else if(p>=80 && p<90){
            System.out.println("B");
        }else if(p>=70 && p<80){
            System.out.println("C");
        }else if(p>=60 && p<70){
            System.out.println("D");
        }else if(p>=40 && p<60){
            System.out.println("E");
        }else if(p<40){
            System.out.println("F");
        }       
  }
}
````

### 4. Write a program to input an integer(A) from user and print the Ath month of the year.
Months list: {January, February, March, April, May, June, July, August, September, October, November, December}
#### Input Format
One line containing an integer integer A.
#### Constraints
1 <= A <= 12
#### Output Format
One line containing the Ath month of the year.
#### Sample Input 0
````
1
````
#### Sample Output 0
````
January
````

#### CODE
````
import java.io.*;
import java.util.*;

public class Solution {

    public static void main(String[] args) {
        Scanner sc= new Scanner(System.in);
        int a = sc.nextInt();
        switch(a){
            case 1:{
                System.out.println("January");
                break;
            }
            case 2:{
                System.out.println("February");
                break;
            }case 3:{
                System.out.println("March");
                break;
            }
            case 4:{
                System.out.println("April");
                break;
            }
            case 5:{
                System.out.println("May");
                break;
            }    
            case 6:{
                System.out.println("June");
                break;
            }
            case 7:{
                System.out.println("July");
                break;
            }
                case 8:{
                System.out.println("August");
                break;
            }
                case 9:{
                System.out.println("September");
                break;
            }
                case 10:{
                System.out.println("October");
                break;
            }
                case 11:{
                System.out.println("November");
                break;
            }
                case 12:{
                System.out.println("December");
                break;
            }
                
        }
    }
}
````

### 5. You are given 3 integer angles(in degrees) A, B and C of a triangle. You have to tell whether the triangle is valid or not.
A triangle is valid if sum of its angles equals to 180.
#### Input Format
First line of the input contains an integer A.
Second line of the input contains an integer B.
Third line of the input contains an integer C.
#### Constraints
1 <= A, B, C <= 180
#### Output Format
Print 1 if the triangle having given sides is valid, else print 0.
#### Sample Input 0
````
 60
 60
 60
````
#### Sample Output 0
````
1
````
#### Explanation 0
Sum of angles = A + B + C = 60 + 60 + 60 = 180 Hence, the given triangle is valid.

### CODE
````
import java.io.*;
import java.util.*;

public class Solution {

    public static void main(String[] args) {
       Scanner s=new Scanner(System.in);
        int a=s.nextInt();
        int b=s.nextInt();
        int c=s.nextInt();
        int t=0;
        t=a+b+c;
        if(t==180){
            System.out.println("1");
        }else
            System.out.println("0");
     }
}
````

### 6.You are given a Bank account having N amount and you are asked to perform ADD(credit) or SUBTRACT(debit) operation of an amount X.
### After the operation print the amount left in the Bank account. If the debit amount is greater than current balance print "Insufficient Funds"(without quotes) and the operation is skipped.
#### Input Format
First line contains a single integer N denoting the balance in bank account.
Next line contains two space separated integers Type and Amount(X).
If Type == 1, Perform ADD operation. If Type == 2, Perform SUBTRACT operation.
#### Constraints
1 <= N, X <= 10^5
#### Output Format
Print Amount in the bank balance after the operation.
#### Sample Input 0
````
1000
1 500
````
#### Sample Output 0
```
1500
````
#### Explanation 0
Initially bank balance is 1000. ADD 500, bank balance becomes 1500, print it.

#### CODE
````
import java.io.*;
import java.util.*;

public class Solution {

    public static void main(String[] args) {
        Scanner s=new Scanner(System.in);
        int a=s.nextInt();
        int o=s.nextInt();
        int c=s.nextInt();
        if(o==1){
            a+=c;
            System.out.print(a);
        }
        else if(c>a)
            System.out.print("Insufficient Funds");
        else{
            a-=c;
            System.out.print(a);
        }
    }
}
````

### 7. Take an integer A as input. You have to tell whether A is divible by both 5 and 11 or not.
#### Input Format
The input contains a single integer A.
#### Constraints
1 <= A <= 10^9
#### Output Format
Print 1 if A is divisible by both 5 and 11, else print 0.

#### CODE
````
import java.io.*;
import java.util.*;

public class Solution {

    public static void main(String[] args) {
         Scanner s = new Scanner(System.in);
      
      //System.out.print("Enter a Number: ");
      int num = s.nextInt();
      
      if(num%5==0 && num%11==0)
         System.out.println("1");
      else
         System.out.println("0");
    }
}
````

### 8. Write a program to input from user three numbers(A, B & C) representing side lengths of a triangle.
### You have to print if the traingle is "equilateral", "scalene" or "isosceles".
#### Input Format
One line containing three space separated integers A, B & C.
#### Constraints
1 <= A <= 100000
1 <= B <= 100000
1 <= C <= 100000
#### Output Format
One string either "equilateral", "scalene" or "isosceles".
#### Sample Input 0
````
5 6 7
````
#### Sample Output 0
````
scalene
````
#### Explanation 0
Since all sides are different, hence it's a scalene triangle

#### CODE
````
import java.io.*;
import java.util.*;

public class Solution {

    public static void main(String[] args) {
      int s1, s2, s3;
        Scanner sc = new Scanner(System.in);    
        
        s1 = sc.nextInt();
        s2 = sc.nextInt();
        s3 = sc.nextInt();
        
        if(s1 == s2 && s2 == s3) 
        {
            System.out.print("equilateral");
        }    
        else if(s1 == s2 || s2 == s3 || s1 == s3) 
        {
            System.out.print("isosceles");
        } 
        else 
        {
            System.out.print("scalene");
        }
    }
}
````

### 9. Write a program to input a number(A) from user and print 1 if it is positive, -1 if it is negative, 0 if it's neither positive nor negative.
#### Input Format
One line containing an integer A.
#### Constraints
1 <= A <= 1000000
#### Output Format
One line each 0/1/-1 as per the question.
#### Sample Input 0
````
50
````
#### Sample Output 0
````
1
````

#### CODE
````
import java.io.*;
import java.util.*;

public class Solution {

    public static void main(String[] args) {
       Scanner s = new Scanner(System.in);
      
      //System.out.print("Enter a Number: ");
      int num = s.nextInt();
      
      if(num>0)
         System.out.println("1");
      else if(num<0)
         System.out.println("-1");
        else
            System.out.println("0");
    }
}
````

### 10. Given two numbers A and B. Print the floor of A/B.
#### Input Format
There are two input lines The first line has a single integer A. The second line has a single integer B.
#### Constraints
1 <= A, B <= 10^4
#### Output Format
Print the floor of A/B in a single line.
#### Sample Input 0
````
4
5
````
#### Sample Output 0
```
0
````
#### Explanation 0
floor(4/5) = 0

#### CODE
````
import java.io.*;
import java.util.*;

public class Solution {

    public static void main(String[] args) {
        Scanner s=new Scanner(System.in);
       int a=s.nextInt();
       int b=s.nextInt();
       int answer = Math.floorDiv(a, b);
       System.out.print(answer); 
    }
}
````
