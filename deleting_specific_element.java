import java.util.Scanner;

public class deleting_specific_element {
    public static void main(String[] args) {
        Scanner sc= new Scanner(System.in);
        System.out.print("eneter a numebr you want to delete: ");
        int n=sc.nextInt();
        int[] arr={1,2,3,4,56,5};
        int i=0;
        int j=0;
        while(i<arr.length){
                    if(arr[i]==n){
                        j++;
                    }
                    else{
                        System.out.print(arr[i]+" ");
                    }
                    i++;
                }
            }
    }