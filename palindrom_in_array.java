public class palindrom_in_array {
    public static void main(String[] args) {
        int[] array = {};
//        boolean palindrom = isPalindrom(array);
        if(isPalindrom(array))
        {
            System.out.println("Palindrom");
        }
        else
        {
            System.out.println("Not Palindrom");
        }
    }
    public static boolean isPalindrom(int[] array) {
        int[] arr = {1, 2,2,1};
        int i = 0;
        while (i < arr.length) {
            if (arr[i] != arr[arr.length - i - 1]) {
                {
                return false;
                }
            }
            i++;
        }
        return true;
    }
}
