import java.util.Scanner;

public class parameter {
    public static void main(String[] args) {
       System.out.println(sum(2,3));
    }
    public static int sum(int a, int b) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter an number1: "+a);
        System.out.println("Enter an number2: "+b);
        int c=a+b;
        return c;
    }
}
