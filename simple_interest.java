import java.util.Scanner;

public class simple_interest {
    public static void main(String[] args){
        Scanner sc = new Scanner(System.in);
        System.out.print("enter a p: ");
        int p =sc.nextInt();
        System.out.print("enter a t: ");
        int t =sc.nextInt();
        System.out.print("enter a r: ");
        int r =sc.nextInt();
        double si=(p*t*r)/100;
        System.out.print("Simple Interest = "+si);
    }
}
