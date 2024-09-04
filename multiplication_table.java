import java.util.Scanner;

public class multiplication_table {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter the number: ");
        int n=sc.nextInt();
        int i=1;
        System.out.println("Multiplication table of "+n);
        while(i<=10) {
            System.out.println(n+"X"+i+"="+(i*n));
            i++;
        }
    }
}