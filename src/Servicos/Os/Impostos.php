<?php

namespace OmieLib\Servicos\Os;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;

/**
 * Dados do impostos do serviço.
 *
 * @pw_element string $cFixarISS Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.<BR><BR>Esse campo é preenchido automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
 * @pw_element decimal $nAliqISS Alíquota de ISS.<BR><BR>Preenchimento opcional.
 * @pw_element decimal $nBaseISS Base de Cálculo do ISS.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
 * @pw_element decimal $nTotDeducao Valor de Dedução da Base de Cálculo. <BR><BR>Preenchimento opcional.<BR><BR>Por padrão, esse campo afeta a Base de Cálculo do ISS.<BR><BR>Para atender a condições legais acordadas para cada munícipio pode afetar as Bases de Cálculos dos Impostos Federais também. Consulte a legislação do seu município.
 * @pw_element decimal $nValorDeducao Valor das deduções do item.<BR><BR>Utilizado apenas nos métodos de Consulta/Listagem.
 * @pw_element decimal $nValorISS Valor do ISS.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
 * @pw_element string $cUtilizaValorImposto Indica se o valor informado para os Impostos Federais deverá ser mantido ao invés de ser recalculado a partir da alíquota.<BR><BR>Preenchimento opcional. O padrão é "N".<BR><BR>Assim:<BR><BR>Caso seja informado "N", indica que valor do imposto deve ser calculado a partir da alíquota e base de cálculo.<BR><BR>Caso seja informado "S", indica que o valor do imposto será mantido e a alíquota será recalculada a partir do valor do imposto e base de cálculo.
 * @pw_element string $cFixarIRRF Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.<BR><BR>Esse campo é preenchido automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
 * @pw_element decimal $nAliqIRRF Alíquota de IRRF.<BR><BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
 * @pw_element decimal $nValorIRRF Valor do IRRF.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a tag [cUtilizarValorImposto] seja diferente de "S".<BR><BR>Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na tag correspondente será desprezada.
 * @pw_element decimal $nValorDeducaoIRRF Valor da dedução da base do IR.
 * @pw_element string $cRetemIRRF Retém IRRF  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
 * @pw_element string $cFixarPIS Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.<BR><BR>Esse campo é preenchido automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
 * @pw_element decimal $nAliqPIS Alíquota de PIS.<BR><BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
 * @pw_element decimal $nValorPIS Valor do PIS.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a tag [cUtilizarValorImposto] seja diferente de "S".<BR><BR>Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na tag correspondente será desprezada.
 * @pw_element string $cRetemPIS Retém PIS  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
 * @pw_element string $cFixarCOFINS Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.<BR><BR>Esse campo é preenchido automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
 * @pw_element decimal $nAliqCOFINS Alíquota de COFINS.<BR><BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
 * @pw_element decimal $nValorCOFINS Valor do COFINS.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a tag [cUtilizarValorImposto] seja diferente de "S".<BR><BR>Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na tag correspondente será desprezada.
 * @pw_element string $cRetemCOFINS Retém COFINS  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
 * @pw_element string $cFixarCSLL Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.<BR><BR>Esse campo é preenchido automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
 * @pw_element decimal $nAliqCSLL Alíquota de CSLL.<BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
 * @pw_element decimal $nValorCSLL Valor de CSLL.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a tag [cUtilizarValorImposto] seja diferente de "S".<BR><BR>Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na tag correspondente será desprezada.
 * @pw_element string $cRetemCSLL Retém CSLL  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
 * @pw_element string $cFixarINSS Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.<BR><BR>Esse campo é preenchido automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
 * @pw_element decimal $nAliqINSS Alíquota de INSS.<BR><BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
 * @pw_element decimal $nValorINSS Valor de INSS.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a tag [cUtilizarValorImposto] seja diferente de "S".<BR><BR>Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na tag correspondente será desprezada.
 * @pw_element string $cRetemINSS Retém INSS  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
 * @pw_element decimal $nAliqRedBaseINSS Percentual de Redução da Base de Cálculo do INSS.<BR><BR>Preenchimento opcional.
 * @pw_element decimal $nAliqRedBaseCOFINS Percentual de Redução da Base de Cálculo do COFINS.<BR><BR>Preenchimento opcional.
 * @pw_element decimal $nAliqRedBasePIS Percentual de Redução da Base de Cálculo do PIS.<BR><BR>Preenchimento opcional.
 * @pw_element boolean $lDeduzISS Deduz o ISS da Base de Cálculo de PIS e COFINS
 * @pw_element string $cCST Código da Situação Tributária IBS/CBS.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
 * @pw_element string $cClassTrib Código de Classificação Tributária.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
 * @pw_element decimal $nAliqIbsUf Alíquota do IBS estadual.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
 * @pw_element decimal $nAliqIbsMun Alíquota do IBS Municipal.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
 * @pw_element decimal $nPercReducaoIbsUf Percentual redução IBS estadual.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
 * @pw_element decimal $nPercReducaoIbsMun Percentual redução IBS municipal.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
 * @pw_element decimal $nAliqCbs Alíquota do CBS.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
 * @pw_element decimal $nPercReducaoCbs Percentual redução CBS.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
 * @pw_element string $cIndOPer Código Indicador de Operação.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
 * @pw_element decimal $nValorIbsUf Valor do IBS Estadual.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
 * @pw_element decimal $nValorIbsMun Valor do IBS Municipal.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
 * @pw_element decimal $nValorCbs Valor do CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
 * @pw_element string $cManCbs Indica que houve alteração manual da alíquota de CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
 * @pw_element string $cManIbsMun Indica que houve alteração manual da alíquota de IBS Municipal.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.<BR>
 * @pw_element string $cManIbsUf Indica que houve alteração manual da alíquota de IBS Estadual.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
 * @pw_element decimal $nBaseCalcIbsCbs Valor da Base de Calculo do IBS e CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
 * @pw_complex impostos
 */
class Impostos{
	/**
	 * Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.<BR><BR>Esse campo é preenchido automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
	 *
	 * @var string
	 */
	public string $cFixarISS;
	/**
	 * Alíquota de ISS.<BR><BR>Preenchimento opcional.
	 *
	 * @var decimal
	 */
	public float $nAliqISS;
	/**
	 * Base de Cálculo do ISS.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
	 *
	 * @var decimal
	 */
	public float $nBaseISS;
	/**
	 * Valor de Dedução da Base de Cálculo. <BR><BR>Preenchimento opcional.<BR><BR>Por padrão, esse campo afeta a Base de Cálculo do ISS.<BR><BR>Para atender a condições legais acordadas para cada munícipio pode afetar as Bases de Cálculos dos Impostos Federais também. Consulte a legislação do seu município.
	 *
	 * @var decimal
	 */
	public float $nTotDeducao;
	/**
	 * Valor das deduções do item.<BR><BR>Utilizado apenas nos métodos de Consulta/Listagem.
	 *
	 * @var decimal
	 */
	public float $nValorDeducao;
	/**
	 * Valor do ISS.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
	 *
	 * @var decimal
	 */
	public float $nValorISS;
	/**
	 * Indica se o valor informado para os Impostos Federais deverá ser mantido ao invés de ser recalculado a partir da alíquota.<BR><BR>Preenchimento opcional. O padrão é "N".<BR><BR>Assim:<BR><BR>Caso seja informado "N", indica que valor do imposto deve ser calculado a partir da alíquota e base de cálculo.<BR><BR>Caso seja informado "S", indica que o valor do imposto será mantido e a alíquota será recalculada a partir do valor do imposto e base de cálculo.
	 *
	 * @var string
	 */
	public string $cUtilizaValorImposto;
	/**
	 * Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.<BR><BR>Esse campo é preenchido automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
	 *
	 * @var string
	 */
	public string $cFixarIRRF;
	/**
	 * Alíquota de IRRF.<BR><BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
	 *
	 * @var decimal
	 */
	public float $nAliqIRRF;
	/**
	 * Valor do IRRF.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a tag [cUtilizarValorImposto] seja diferente de "S".<BR><BR>Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na tag correspondente será desprezada.
	 *
	 * @var decimal
	 */
	public float $nValorIRRF;
	/**
	 * Valor da dedução da base do IR.
	 *
	 * @var decimal
	 */
	public float $nValorDeducaoIRRF;
	/**
	 * Retém IRRF  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
	 *
	 * @var string
	 */
	public string $cRetemIRRF;
	/**
	 * Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.<BR><BR>Esse campo é preenchido automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
	 *
	 * @var string
	 */
	public string $cFixarPIS;
	/**
	 * Alíquota de PIS.<BR><BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
	 *
	 * @var decimal
	 */
	public float $nAliqPIS;
	/**
	 * Valor do PIS.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a tag [cUtilizarValorImposto] seja diferente de "S".<BR><BR>Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na tag correspondente será desprezada.
	 *
	 * @var decimal
	 */
	public float $nValorPIS;
	/**
	 * Retém PIS  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
	 *
	 * @var string
	 */
	public string $cRetemPIS;
	/**
	 * Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.<BR><BR>Esse campo é preenchido automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
	 *
	 * @var string
	 */
	public string $cFixarCOFINS;
	/**
	 * Alíquota de COFINS.<BR><BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
	 *
	 * @var decimal
	 */
	public float $nAliqCOFINS;
	/**
	 * Valor do COFINS.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a tag [cUtilizarValorImposto] seja diferente de "S".<BR><BR>Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na tag correspondente será desprezada.
	 *
	 * @var decimal
	 */
	public float $nValorCOFINS;
	/**
	 * Retém COFINS  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
	 *
	 * @var string
	 */
	public string $cRetemCOFINS;
	/**
	 * Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.<BR><BR>Esse campo é preenchido automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
	 *
	 * @var string
	 */
	public string $cFixarCSLL;
	/**
	 * Alíquota de CSLL.<BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
	 *
	 * @var decimal
	 */
	public float $nAliqCSLL;
	/**
	 * Valor de CSLL.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a tag [cUtilizarValorImposto] seja diferente de "S".<BR><BR>Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na tag correspondente será desprezada.
	 *
	 * @var decimal
	 */
	public float $nValorCSLL;
	/**
	 * Retém CSLL  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
	 *
	 * @var string
	 */
	public string $cRetemCSLL;
	/**
	 * Indica se o imposto foi alterado pelo usuário ou informado via importação de planilha ou API.<BR><BR>Esse campo é preenchido automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
	 *
	 * @var string
	 */
	public string $cFixarINSS;
	/**
	 * Alíquota de INSS.<BR><BR>Preenchimento opcional.<BR><BR>Para o cálculo do imposto o preenchimento é obrigatório caso a tag [cUtilizaValorImposto] seja diferente de "S". <BR><BR>Lembre-se também de indicar se o imposto deve ser retido ou não na tag correspondente.
	 *
	 * @var decimal
	 */
	public float $nAliqINSS;
	/**
	 * Valor de INSS.<BR><BR>Preenchimento opcional.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração caso a tag [cUtilizarValorImposto] seja diferente de "S".<BR><BR>Caso a tag [cUtilizarValorImposto] seja preenchida com "S", indicará que o valor informado deve ser preservado e que a respectiva alíquota deve ser calculada ao invés do valor do imposto. Nesse caso, o alíquota informada na tag correspondente será desprezada.
	 *
	 * @var decimal
	 */
	public float $nValorINSS;
	/**
	 * Retém INSS  (S/N).<BR><BR>Preenchimento opcional. Padrão é "N".<BR><BR>Indica se o imposto deve ser retido ou não.
	 *
	 * @var string
	 */
	public string $cRetemINSS;
	/**
	 * Percentual de Redução da Base de Cálculo do INSS.<BR><BR>Preenchimento opcional.
	 *
	 * @var decimal
	 */
	public float $nAliqRedBaseINSS;
	/**
	 * Percentual de Redução da Base de Cálculo do COFINS.<BR><BR>Preenchimento opcional.
	 *
	 * @var decimal
	 */
	public float $nAliqRedBaseCOFINS;
	/**
	 * Percentual de Redução da Base de Cálculo do PIS.<BR><BR>Preenchimento opcional.
	 *
	 * @var decimal
	 */
	public float $nAliqRedBasePIS;
	/**
	 * Deduz o ISS da Base de Cálculo de PIS e COFINS
	 *
	 * @var boolean
	 */
	public bool $lDeduzISS;
	/**
	 * Código da Situação Tributária IBS/CBS.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
	 *
	 * @var string
	 */
	public string $cCST;
	/**
	 * Código de Classificação Tributária.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
	 *
	 * @var string
	 */
	public string $cClassTrib;
	/**
	 * Alíquota do IBS estadual.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
	 *
	 * @var decimal
	 */
	public float $nAliqIbsUf;
	/**
	 * Alíquota do IBS Municipal.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
	 *
	 * @var decimal
	 */
	public float $nAliqIbsMun;
	/**
	 * Percentual redução IBS estadual.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
	 *
	 * @var decimal
	 */
	public float $nPercReducaoIbsUf;
	/**
	 * Percentual redução IBS municipal.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
	 *
	 * @var decimal
	 */
	public float $nPercReducaoIbsMun;
	/**
	 * Alíquota do CBS.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
	 *
	 * @var decimal
	 */
	public float $nAliqCbs;
	/**
	 * Percentual redução CBS.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
	 *
	 * @var decimal
	 */
	public float $nPercReducaoCbs;
	/**
	 * Código Indicador de Operação.<BR><BR>Caso não preenchido para um novo item nos métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço ou configuração padrão da reforma tributária no Omie.
	 *
	 * @var string
	 */
	public string $cIndOPer;
	/**
	 * Valor do IBS Estadual.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
	 *
	 * @var decimal
	 */
	public float $nValorIbsUf;
	/**
	 * Valor do IBS Municipal.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
	 *
	 * @var decimal
	 */
	public float $nValorIbsMun;
	/**
	 * Valor do CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
	 *
	 * @var decimal
	 */
	public float $nValorCbs;
	/**
	 * Indica que houve alteração manual da alíquota de CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
	 *
	 * @var string
	 */
	public string $cManCbs;
	/**
	 * Indica que houve alteração manual da alíquota de IBS Municipal.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.<BR>
	 *
	 * @var string
	 */
	public string $cManIbsMun;
	/**
	 * Indica que houve alteração manual da alíquota de IBS Estadual.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
	 *
	 * @var string
	 */
	public string $cManIbsUf;
	/**
	 * Valor da Base de Calculo do IBS e CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.<BR><BR>Para os métodos de inclusão e alteração, esse campo será preenchido conforme o cadastro do serviço no Omie.
	 *
	 * @var decimal
	 */
	public float $nBaseCalcIbsCbs;
}
