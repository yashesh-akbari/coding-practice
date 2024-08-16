import java.util.Scanner;

public class perimeter_rectangle {
    public static void main(String[] args) {
        Scanner in=new Scanner(System.in);
        System.out.print("Enter the A of the rectangle: ");
        Float A=in.nextFloat();
        System.out.print("Enter the B of the rectangle: ");
        Float B=in.nextFloat();
        System.out.print("Enter the C of the rectangle: ");
        Float C=in.nextFloat();
        System.out.print("Enter the D of the rectangle: ");
        Float D=in.nextFloat();
        System.out.print("Perimeter of rectangle ABCD: "+(A+B+C+D));
    }
}
