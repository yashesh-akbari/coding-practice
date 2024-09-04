import java.util.Scanner;

public class Bitwise_Opertar {
    public static void main(String[] args){
        Scanner sc=new Scanner(System.in);
        System.out.print("Enter a first number: ");
        int first_num=sc.nextInt();
        System.out.print("Enter a Second number: ");
        int Second_num=sc.nextInt();
        System.out.println("bitwise two number AND is:"+(first_num & Second_num));
        System.out.println("bitwise two number OR is:"+(first_num | Second_num));
        System.out.println("bitwise two number XOR is:"+(first_num ^ Second_num));
    System.out.println("bitwise two number compliment is:"+(~first_num));
        System.out.println("bitwise two number left shift is:"+(first_num << 1));
        System.out.println("bitwise two number Right shift is:"+(first_num >> 1));

    }
}
