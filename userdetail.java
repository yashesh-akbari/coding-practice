import java.util.Scanner;

public class userdetail {
    public static void main(String[] args){
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter your name: ");
        String name =sc.nextLine();
        System.out.println("Hi "+name);
        System.out.print("Enter your age: ");
        int age =sc.nextInt();
        System.out.println(name+",you are " + age +" old");
    }
}
