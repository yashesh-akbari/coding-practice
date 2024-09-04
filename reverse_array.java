import java.util.Arrays;

public class reverse_array {
    public static void main(String[] args) {
                int[] arr = { 1, 2, 3, 4, 5 };
                int[] newArr = new int[arr.length];
                int i = 0;
                while (i < arr.length) {
                    newArr[i] = arr[arr.length - 1 - i];
                    i++;
                }
                System.out.println(Arrays.toString(newArr));
    }
}