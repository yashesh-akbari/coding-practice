public class patten_using_while {
    public static void main(String[] args) {
//    int i = 0;
//        while(i<5)
//        {
//            System.out.print("*");
//            int l=0;
//            while(l<i)
//            {
//                System.out.print(" *");
//                l++;
//            }
//            System.out.println();
//            i++;
//        }

        for (int i = 0; i < 5; i++) {
            System.out.print("*");
            for (int j = 0; j < i; j++) {
                System.out.print("  *");
            }
            System.out.println();
        }
    }
}
