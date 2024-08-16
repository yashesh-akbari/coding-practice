import java.util.Scanner;

public class add_two_number {
    public static void main(String[] args)
    {
        Scanner sc=new Scanner(System.in);
        System.out.print("Enter first number: ");
        int num1=sc.nextInt();
        System.out.print("Enter second number: ");
        int num2=sc.nextInt();
        System.out.println("Addition of two number is: "+(num1+num2));

    }
}
