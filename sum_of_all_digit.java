import java.util.Scanner;

public class sum_of_all_digit {
    public static void main(String[] args)
    {
        Scanner sc=new Scanner(System.in);
        System.out.print("Enter any number: ");
        int n=sc.nextInt();
        int i=1;
        int sum=0;
        while(i<=n)
        {
            sum=sum+n%10;
            n=n/10;
        }
        System.out.println("Sum of all digits: "+sum);
    }
}