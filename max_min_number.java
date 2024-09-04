//fibonaki series from user input

import java.util.*;

public class max_min_number {
    public static void main(String[] args) {
      Scanner sc=new Scanner(System.in);
      System.out.print("Enter a number: ");
      int n=sc.nextInt();
      int f1=0,f3;
      int f2=1;
      for(int i=0;i<n;i++)
      {
          f3=f1+f2;
          System.out.print(f3+" ");
          f1=f2;
          f2=f3;
      }
    }
}
