import java.util.Scanner;

public class grades {
    public static void main(String[] args) {
        Scanner sc=new Scanner(System.in);
        System.out.print("Enter a marks: ");
        int marks=sc.nextInt();
        if(marks>90)
        {
            System.out.println("you get A grade:");
        }
        else if(marks>75)
        {
            System.out.println("You get B Grade: ");
        }
        else if(marks>60)
        {
            System.out.println("You get C Grade: ");
        }
        else if(marks>30)
        {
            System.out.println("You get D Grade: ");
        }
        else
        {
            System.out.println("You get F Grade: ");
        }
    }
}
