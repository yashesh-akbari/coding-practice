import java.util.Scanner;

public class prime {
    public static void main(String[] args) {
        Scanner sc=new Scanner(System.in);
        System.out.print("Enter a number: ");
        int n=sc.nextInt();
        int i=2;
        while(i<n)
        {
           if(n%i==0){
               System.out.println(n+" is not prime number");
               break;
           }
            if(n%i!=0)
            {
                System.out.println(n+" is prime number");
                break;
            }
            i++;
        }
    }
}