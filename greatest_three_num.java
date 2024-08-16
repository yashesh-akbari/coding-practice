import java.util.Scanner;

public class greatest_three_num {
    public static void main(String[] args)
    {
        Scanner sc= new Scanner(System.in);
        System.out.println("Enter the first number");
        int num1=sc.nextInt();
        System.out.println("Enter the second number");
        int num2=sc.nextInt();
        System.out.println("Enter the threed number");
        int num3=sc.nextInt();
        if(num1>num2 && num1>num3)
        {
            System.out.println(num1+" is highest number");
        }
        else if(num2>num1 && num2>num3)
        {
            System.out.println(num2+" is highest number");
        }
        else if(num3>num2 && num3>num1)
        {
            System.out.println(num3+" is highest number");
        }
        else{
            System.out.println("you enter any two or three number same:");
        }

    }
}
