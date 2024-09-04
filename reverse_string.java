//reverse string example: hello => olleh

import java.util.Scanner;

public class reverse_string {
    public static void main(String[] args)
    {
       reverse_string();
    }
    public static void reverse_string()
    {
        Scanner sc = new Scanner(System.in);
        System.out.print("Enter a string: ");
        String s = sc.nextLine();
        for (int i = s.length()-1; i >= 0; i--)
        {
            System.out.print(s.charAt(i));
        }
    }
}
