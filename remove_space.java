public class remove_space {
    public static void main(String[] args){
        String s = "  abc  def\t";

        s = s.strip();

        System.out.println(s);
    }
}
