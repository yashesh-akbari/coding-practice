import java.util.Scanner;

public class reverse_digit {
    public static void main(String[] args) {
        Scanner sc=new Scanner(System.in);
        System.out.print("Enter a number: ");
        int n=sc.nextInt();
        int num=0;
        int temp=0;
        int value=n;
        for (int i=0;n>0;i++)
        {
            num=n%10;
            temp=temp*10+num;
            n=n/10;
        }
        System.out.println(temp);
//        if (temp==value){
//            System.out.print("pailndrom number");
//        }
//        else
//        {
//            System.out.print("not pailndrom number");
//        }
    }
}