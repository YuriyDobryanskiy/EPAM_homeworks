require_relative "func.rb"
include Methods

#1
text1 = 'Hello'
text2 = 'World'
puts ( "#{text1} #{text2}" )
#2
puts ( text1[0] )
puts ( text1[1] )
puts ( text1[text1.length - 1] )
#3
puts ( Methods.checkNumberValue(-5) )
puts ( Methods.checkNumberValue(0) )
puts ( Methods.checkNumberValue(-3) )
puts ( Methods.checkNumberValue(2) )
#4
puts ( Methods.checkHourQuarter(2) )
puts ( Methods.checkHourQuarter(16) )
puts ( Methods.checkHourQuarter(35) )
puts ( Methods.checkHourQuarter(59) )
#5
puts ( '2014 - ' + Methods.checkLeapYear(2014).to_s )
puts ( '2000 - ' + Methods.checkLeapYear(2000).to_s )
puts ( '1990 - ' + Methods.checkLeapYear(1990).to_s )
#6
puts ( Methods.sumArrayNumers(385934) )
puts ( Methods.sumArrayNumers(385935) )

#7
# Перетворити рядок 'var_test_text' в 'varTestText'

first_string = CapText.new('var_test_text')
puts (first_string.sumStrArr)