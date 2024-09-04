public class check_array_sorted {
    public static void main(String[] args)
    {
        int[] arr={1,2,3,2,1};
        int i=1;
        while (i<arr.length){
          if(arr[i]<arr[i-1]){
              System.out.println("your array is in inceraseing order");
          } else {
              System.out.println("your array is in deceraseing order");
          }
          i++;
        }
    }
}