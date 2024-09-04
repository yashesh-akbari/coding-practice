import java.util.Scanner;

public class funtion {
    public static void main(String[] args) {
        int num1=sum();
        int num2=sum();
        System.out.println("sum of two number:" +(num1+num2));
    }
    public static int sum()
    {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter the number: ");
        int n=sc.nextInt();
        return n;
    }
}
