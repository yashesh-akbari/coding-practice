//output: * * * *
//        * * *
//        * *
//        *

public class p4 {
    public static void main(String[] args) {
        for(int row=4;row>0;row--)
        {
            for(int col=1;col<=row;col++)
            {
                System.out.print("* ");
            }
            System.out.println();
        }
    }
}
