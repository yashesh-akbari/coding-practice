import java.util.Scanner;

public class ex {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter number: ");
        int n = sc.nextInt();
        int temp=n;
        int sum = 0;
        for(int i=1;i<=n;i++)
        {
           n=n/10;
           sum=sum+n;
        }
        if(temp==sum)
        {
            System.out.println("the number is prime");
        }
        else
        {
            System.out.println("the number is not prime");
        }
//        System.out.println("The sum is: " + sum);
    }
}