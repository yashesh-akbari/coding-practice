import java.util.Scanner;

public class user_input {
    public static void main(String[] args){
        Scanner sc=new Scanner(System.in);
        System.out.print("Enter Your Name: ");
        String name=sc.nextLine();
        System.out.println("Welcome "+name+" to KG Coding");
    }
}
