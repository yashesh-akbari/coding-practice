import java.util.Scanner;

public class least_common_multiple {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter the first number: ");
        int a = sc.nextInt();
        System.out.print("Enter the second number: ");
        int b = sc.nextInt();
        int comm=comm(a,b);
        System.out.println("The common multiple of " + a + " and " + b + " are: "+comm);
    }
    public static int comm(int a, int b) {
        int i=1;
        int fin;
        while(true)
        {
            int factor = a * i;
            if(factor % b==0)
            {
                return factor;
            }
            i++;
        }
    }
}