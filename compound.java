import java.util.Scanner;

public class compound {
    public static void main(String[] args){
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter a p: ");
        double p = sc.nextDouble();
        System.out.print("Enter a t: ");
        double t = sc.nextDouble();
        System.out.print("Enter a r: ");
        double r = sc.nextDouble();
        double ci=p*((1+r)/100)*t;
        System.out.println("Compound Interest="+ci+"\n");
    }
}
