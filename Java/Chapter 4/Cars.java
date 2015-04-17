package Chapter4;

/**
 *
 * @author trophic
 */
public class Cars {
   //variables
   private String manufacturer;
   private String year;
   private String regoNumber;
   private int kilowatts;
   
   //constructor

    public Cars() {
    }

    public Cars(String manufacturer, String year, String regoNumber, int kilowatts) {
        this.manufacturer = manufacturer;
        this.year = year;
        this.regoNumber = regoNumber;
        this.kilowatts = kilowatts;
    }
   
    //methods

    public String getManufacturer() {
        return manufacturer;
    }

    public String getYear() {
        return year;
    }

    public String getRegoNumber() {
        return regoNumber;
    }

    public int getKilowatts() {
        return kilowatts;
    }

    public void setManufacturer(String manufacturer) {
        this.manufacturer = manufacturer;
    }

    public void setYear(String year) {
        this.year = year;
    }

    public void setRegoNumber(String regoNumber) {
        this.regoNumber = regoNumber;
    }

    public void setKilowatts(int kilowatts) {
        this.kilowatts = kilowatts;
    } 
}