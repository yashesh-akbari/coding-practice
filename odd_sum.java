import java.util.Scanner;

public class odd_sum{
    public static void main(String[] args)
    {
        Scanner sc=new Scanner(System.in);
        System.out.print("Enter any number: ");
        int n=sc.nextInt();
        int i=1;
        int sum=0;
        while(i<=n)
        {
            sum=sum+i;
            i=i+2;
        }
        System.out.println("Sum of all odd digits: "+sum);
    }
}