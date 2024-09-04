import java.util.Scanner;

public class array {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int[] arr={1,2,3,4,5,6,8};
        int i=0;
        System.out.print("Enter the number you want to search: ");
        int n=sc.nextInt();
        while (i<arr.length) {
//            System.out.println(arr[i]);
            if(arr[i]==n)
            {
                System.out.println("number is in array: ");
                break;
            }
            else {
                System.out.println("number is not in array: ");
            }
            i++;
        }
    }
}
