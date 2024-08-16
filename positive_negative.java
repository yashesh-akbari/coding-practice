import java.util.Scanner;

public class positive_negative {
    public static void main(String[] args){
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter number: ");
        int n =sc.nextInt();
        if(n<0)
        {
            System.out.println("Negative number");
        }
        else if(n==0)
        {
            System.out.println("Zero");
        }
        else
        {
            System.out.println("Positive number");
        }


    }
}
