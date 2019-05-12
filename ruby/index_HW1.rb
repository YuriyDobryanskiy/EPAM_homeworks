=begin
https://docs.google.com/document/d/1FpfkHs7FMhoOqnjEqiUjsoahvFm5rtk60GYPBzbFxnw/edit#heading=h.jz2e3ceokxte
=end

text1 = 'Hello'
text2 = 'World'
def checkNumberValue(number)
    if (number > 0 && number < 5)
        return 'correct'
    elsif (number == 0)
        return 'number = 0'    
    else
        return 'incorrect'
    end    
end

def checkHourQuarter(number)
    case number
    when 0..15
       return 'the first'
    when 16..30
       return 'the second'
    when 31..45
       return 'the third'
    when 46..59
       return 'the fourth'
    else
       return 'incorrect time'
    end
end

def checkLeapYear(year)
    if ( ((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0) )
        return 'Leap year'
    else
        return 'isn\'t a leap year'
    end    
end    

def sumArrayNumers(numbers)
    part1 = numbers.to_s[0..2].split('').map(&:to_i)
    part2 = numbers.to_s[3..(numbers.to_s.length())].split('').map(&:to_i)

    sumPart1 = part1.inject(0) {|sum, i|  sum + i }
    sumPart2 = part2.inject(0) {|sum, i|  sum + i }

    if (sumPart1 == sumPart2)
        return ("Yes")
    else
        return ("No")
    end
end


#1
puts ( text1 +' '+ text2.downcase() )
#2
puts ( text1[0] )
puts ( text1[1] )
puts ( text1[text1.length - 1] )
#3
puts ( checkNumberValue(-5) )
puts ( checkNumberValue(0) )
puts ( checkNumberValue(-3) )
puts ( checkNumberValue(2) )
#4
puts ( checkHourQuarter(2) )
puts ( checkHourQuarter(16) )
puts ( checkHourQuarter(35) )
puts ( checkHourQuarter(59) )
#5
puts ( '2014 - ' + checkLeapYear(2014).to_s )
puts ( '2000 - ' + checkLeapYear(2000).to_s )
puts ( '1990 - ' + checkLeapYear(1990).to_s )
#6
puts ( sumArrayNumers(385934) )
  