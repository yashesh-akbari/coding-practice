import java.util.Scanner;

public class Area_triangle {
    public static void main(String[] args){
        Scanner sc=new Scanner(System.in);
        System.out.print("Enter the length of the triangle: ");
        double l=sc.nextDouble();
        System.out.print("Enter the width of the triangle: ");
        double w=sc.nextDouble();
        double area=(1*l*w)/2;
        System.out.println("Area of triangle: "+area);
    }
}
