import java.util.Scanner;

public class swap {
    //swap two numbers
    public static void main(String[] args)
    {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter the first number: ");
        int i = sc.nextInt();
        //int i=5;
        System.out.print("Enter the second number: ");
        int j = sc.nextInt();
        //int j=10;
        int temp=i;
        i=j;
        j=temp;
        temp=i;
        System.out.print("After swaping");
        System.out.println("First number: "+i);
        System.out.println("Second number: "+j);

    }
}
