import java.util.Scanner;

public class factorial {
 public static void main(String[] args){
     Scanner sc = new Scanner(System.in);
     System.out.print("Enter a number: ");
     int n=sc.nextInt();
     if(n<2)
     {
         System.out.println("The factoril of number is 1");
     }
     else
     {
         int i=2;
         int f=1;
         while(i<=n){
             f=f*i;
             i++;
         }
         System.out.println("The factorial of number is "+f);
     }
 }
}