import java.util.Scanner;

public class fibonaki{
    public static void main(String[] args){
        Scanner sc=new Scanner(System.in);
        System.out.print("Enter fibonaki series you want to start: ");
        int n=sc.nextInt();
        int first=0;
        int second=1;
        while (first+second<=n){
            int temp=first+second;
            System.out.print(temp+" ");
            first=second;
            second=temp;
        }

    }
}
