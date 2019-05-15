=begin
https://docs.google.com/document/d/1FpfkHs7FMhoOqnjEqiUjsoahvFm5rtk60GYPBzbFxnw/edit#heading=h.jz2e3ceokxte
=end

module Methods

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

def getSumOfArr(arr)
    sum = 0
    arr.each do |num|
        sum += num
    end
    return sum
end


def sumArrayNumers(numbers)
    part1 = numbers.to_s[0..2].split('').map(&:to_i)
    part2 = numbers.to_s[3..(numbers.to_s.length())].split('').map(&:to_i)

    #sumPart1 = part1.inject(0) {|sum, i|  sum + i }
    #sumPart2 = part2.inject(0) {|sum, i|  sum + i }

    return (getSumOfArr(part1) == getSumOfArr(part2)) ? "Yes" : "No"
end

class CapText
    attr_accessor :input_text

    def initialize(text)
        @input_text = text.split('_')
    end

    def sumStrArr
        some = ''
        @input_text.each do |value|
            some += value.capitalize            
        end
        return some[0].downcase + some[1..-1]
    end
    
end

def checkNumber3(arr)
    newArr = Array.new
    arr.each do |num|
        if (num.to_s.include? "3")
            newArr << num
        end 
    end
    return newArr
end

def checkAllNumber3(arr)
    some = 0
    arr.each do |num|
        number = num.to_s.scan('3').count
        if (number > 0)
            some += number
        end
    end
    return some
end

class ReversArrOfStrings
    attr_accessor :input_text

    def initialize(text)
        @input_text = text.split(' ')
    end

    def reversString
        some_str = ''
        i = 0
        while ( i < @input_text.count)
            some_str += "#{@input_text[i].reverse} "
            i += 1
        end
        return some_str
    end    
end

def repeatNumbers(arr)
    newArr = Array.new
    arr.each do |num|
        i = 1
        while i <= num
            newArr << num
            i += 1
        end
    end
    return newArr
end





#Methods
end