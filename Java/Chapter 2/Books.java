package Chapter2;

/**
 *
 * @author trophic
 */
public class BookOrder {
    //variables
    private String author ;
    private String title ;
    private double bookCost;
    private int bookQuantity;
    private double value;
    // blank constructor
    public BookOrder() {
    }
    //proper constructor
    public BookOrder(String author, String title, double bookCost, int bookQuantity) {
        this.author = author;
        this.title = title;
        this.bookCost = bookCost;
        this.bookQuantity = bookQuantity;
    }
    //methods
    public String getAuthor()
    {
        return author;
    }

    public String getTitle() {
        return title;
    }

    public double getBookCost() {
        return bookCost;
    }

    public int getBookQuantity() {
        return bookQuantity;
    }

    public void setAuthor(String author) {
        this.author = author;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public void setBookCost(double bookCost) {
        this.bookCost = bookCost;
    }

    public void setBookQuantity(int bookQuantity) {
        this.bookQuantity = bookQuantity;
    }
   
    //calculations
    public void calc() {
        value = getBookCost() * getBookQuantity();
    }
    public double getValue()
    {
        return value;
    }
}