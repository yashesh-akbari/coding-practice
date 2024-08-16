import java.util.Scanner;

public class age_group {
    public  static void main(String[] args)
    {
        Scanner sc=new Scanner(System.in);
        System.out.print("Enter your age: ");
        int n=sc.nextInt();
        if(n<13)
        {
            System.out.println("you are child");
        }
        else if(n<20)
        {
            System.out.println("you are teenager");
        }
        else if(n<60)
        {
            System.out.println("you are adult");
        }
        else{
            System.out.println("you are senior citizen");
        }
    }
}
