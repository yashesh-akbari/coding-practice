import java.util.Scanner;

public class no_of_occances {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter a number you want to search occances time: ");
        int n = sc.nextInt();
        int[] arr={1,2,2,4,5};
        int i=0;
        int j=0;
        while(i<arr.length){
            if(arr[i]==n){
                j++;
            }
            i++;
        }
        System.out.println("the number "+  n +" is occurrences "+j+ " times");
    }
}
