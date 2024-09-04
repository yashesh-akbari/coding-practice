public class min_max_in_array {
    public static void main(String[] args)
    {
        int[] arr={1,98,3,422,34,0};
        int i=1;
        int min_num = 0;
        int max_num = 0;
        while (i<arr.length)
        {
            if(arr[i]<arr[i-1])
            {
                min_num=arr[i];
            }
            if(arr[i]>arr[i-1])
            {
                int temp=arr[i];
                if(temp>max_num)
                {
                    max_num=temp;
                }
                else {
                    temp=max_num;
                }
            }
            i++;
        }
        System.out.println("the minmum number is: "+min_num);
        System.out.println("the maxmum number is: "+max_num);
    }
}