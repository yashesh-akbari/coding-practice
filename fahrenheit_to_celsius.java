import java.util.Scanner;

public class fahrenheit_to_celsius {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        System.out.print("Enter the value of fahrenheit: ");
        double fahrenheit = in.nextDouble();
        double c=(fahrenheit-32)*5/9;
        System.out.println("The Celsius is "+c);
    }
}
