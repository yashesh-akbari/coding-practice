import java.util.Scanner;

public class fact_recursion {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter a number: ");
        int num = sc.nextInt();
        int result=fact(num);
        System.out.println("fact of "+num+" = "+result);
    }
    public static int fact(int n)
    {
        if (n==0)
        {
            return 1;
        }
        else {
            return n*fact(n-1);
        }
    }
}
