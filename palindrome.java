import java.util.Scanner;

public class palindrome {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter the number: ");
        int n = sc.nextInt();
        int temp = n;
        int newNum = 0;
        int digit = 0;
        while (n > 0) {
            digit = n % 10;
            newNum = newNum * 10 + digit;
            n = n / 10;
        }
        if (temp == newNum) {
            System.out.println(newNum + " the given number is palindrome");
        } else {
            System.out.println(newNum + "the given number is not palindrome");
        }
    }
}