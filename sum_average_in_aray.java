import java.util.Scanner;

public class sum_average_in_aray {
    public static void main(String[] args)
    {
        int[] arr = {1,2,3,4,5};
        int sum=0;
        int i=0;
        while(i<arr.length)
        {
            sum+=arr[i];
            i++;
        }
        double avg = sum/arr.length;
        System.out.println("The average of the array is: "+avg);
        System.out.println("The sum of the array is: "+sum);
    }
}
