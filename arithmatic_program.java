import java.util.Scanner;

public class arithmatic_program {
    public static void main(String[] args){
        Scanner sc=new Scanner(System.in);
        System.out.print("Enter a first number: ");
        double a=sc.nextDouble();
        System.out.print("Enter a second number: ");
        double b=sc.nextDouble();
        System.out.println("Addition of Two number: "+(a+b));
        System.out.println("Substration of Two number: "+(a-b));
        System.out.println("multiption of Two number: "+(a*b));
        System.out.println("Division of Two number: "+(a/b));
        System.out.println("perseon tage  of Two number: "+(a%b));
    }
}
