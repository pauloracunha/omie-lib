<?php

namespace OmieLib\Produtos\Recebimentonfe;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarEtapaRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConsultarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoExcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoListarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoReverterRequest;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarEtapaResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConsultarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoExcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoListarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoReverterResponse;

/**
 * Dados das parcelas
 *
 * @pw_element string $dVencimento Data de vencimento da parcela
 * @pw_element integer $nIdTitulo ID da Conta a Receber ou a Pagar
 * @pw_element integer $nSequencia Número da Parcela
 * @pw_element decimal $vParcela Valor da parcela
 * @pw_element decimal $pParcela Percentual da parcela
 * @pw_element string $cTipoDocumento Código para o Tipo de Documento.<BR><BR>Valores possíveis: <BR><BR>13S - 13o. Salário<BR>99999 - Outros<BR>ACO - Acordo<BR>ACOB - Acordo - Boleto<BR>ACOT - Acordo - Transferência<BR>ADI - Adiantamento<BR>ANT - Antecipação<BR>APL - Aplicação<BR>APO - Apólice<BR>BIL - Bilhete<BR>BOL - Boleto<BR>BOLV - Boleto à Vista<BR>BONUS - Bonus<BR>CAP - Capitalização<BR>CF - Cupom Fiscal<BR>CHD - Cheque Devolvido<BR>CHP - Cheque Pré<BR>CHQ - Cheque<BR>CHT - Cheque de Terceiros<BR>CNT - Crédito em Conta<BR>COB - Cobrança<BR>COM - Comissão<BR>CON - Convênios<BR>CONC - Cobrança de Concessionária<BR>COND - Condicional<BR>CONS - Consignado<BR>CONSO - Consórcio<BR>CRC - Cartão de Crédito<BR>CRD - Cartão de Débito<BR>CRE - Crediário<BR>CRT - Cartão<BR>CTE - CT-e<BR>CTR - Contrato<BR>CUSJ - Custos Judiciais<BR>DACTE - DACTE<BR>DAE - DAE<BR>DAJE - DAJE<BR>DAM - DAM<BR>DANFE - DANFE<BR>DAR - DAR<BR>DARE - DARE<BR>DARJ - DARJ<BR>DARM - DARM<BR>DAS - DAS<BR>DDA - DDA<BR>DEB - Débito em Conta<BR>DEBA - Débito Automático<BR>DEP - Depósito<BR>DEV - Devolução<BR>DFE - Documento Fiscal Equivalente<BR>DIN - Dinheiro<BR>DLC - Distribuição de Lucros<BR>DNF - Documento não fiscal<BR>DNFSE - DANFSE<BR>DOC - DOC<BR>DPVAT - DPVAT<BR>DRF - DARF<BR>DUA - DUA<BR>DUAM - DUAM<BR>DUP - Duplicata<BR>EMP - Empréstimo<BR>ENC - Encargos<BR>FAT - Fatura<BR>FER - Férias<BR>FIA - Fiado<BR>FIN - Financiamento<BR>FPGT - Folha de Pagamento<BR>GARE - GARE<BR>GNRE - GNRE<BR>GPS - GPS<BR>GRCS - GRCS<BR>GRCSU - GRCSU<BR>GRF - Guia de Recolhimento do FGTS<BR>GRU - GRU<BR>GUIA - Guia de Recolhimento<BR>HOL - Holerite<BR>IMP - Imposto<BR>INV - Invoice<BR>IPTU - IPTU<BR>IPVA - IPVA<BR>JUROS - Juros Limite<BR>MED - Medição<BR>MULTA - Multas<BR>MUTUO - Mútuo<BR>NC - Nota de Crédito<BR>ND - Nota de Débito<BR>NF - Nota Fiscal<BR>NFA - Nota Fiscal de Abastecimento<BR>NFC - Nota Fiscal de Consumidor<BR>NFCE - Nota Fiscal de Consumidor Eletrônica<BR>NFD - Nota Fiscal de Devolução<BR>NFE - Nota Fiscal Eletrônica<BR>NFS - Nota Fiscal de Serviço<BR>NFST - Nota Fiscal de Telecomunicações<BR>PED - Pedido<BR>PEN - Pensão Alimentícia<BR>PER - Permuta<BR>PIX - Pix<BR>PROL - Pro-Labore<BR>PROT - Protesto<BR>PROV - Provisão<BR>REC - Recibo<BR>REE - Reembolso<BR>REND - Rendimentos<BR>RES - Resgate<BR>RET - Rescisão Trabalhista<BR>RPA - RPA<BR>SAQ - Saque<BR>TAR - Tarifa<BR>TED - TED<BR>TFE - Taxa de Fiscalização de Estabelecimentos<BR>TIC - Ticket<BR>TID - Título Descontado<BR>TRA - Transferência<BR>TRAV - Transferência à Vista<BR>TRLAV - Licenciamento<BR>TX - Taxa<BR>VIST - A Vista<BR>VOU - Voucher<BR>WSITE - Website<BR><BR>Listagem completa disponível na API: /api/v1/geral/tiposdoc/
 * @pw_element string $cFormaPagamento Código da Forma de Pagamento.<BR><BR>Valores possíveis:<BR><BR>01 - Dinheiro<BR>02 - Cheque<BR>03 - Cartão de Crédito<BR>04 - Cartão de Débito<BR>05 - Crédito Loja<BR>10 - Vale Alimentação<BR>11 - Vale Refeição<BR>12 - Vale Presente<BR>13 - Vale Combustível<BR>14 - Duplicata Mercantil<BR>15 - Boleto Bancário<BR>16 - Depósito Bancário<BR>17 - Pagamento Instantâneo (PIX)<BR>18 - Transferência bancária, Carteira Digital<BR>19 - Programa de fidelidade, Cashback, Crédito Virtual.<BR>90 - Sem Pagamento<BR>99 - Outros <BR><BR>Listagem completa disponível na API: /api/v1/geral/meiospagamento/
 * @pw_complex parcelasLista
 */
class ParcelasLista{
	/**
	 * Data de vencimento da parcela
	 *
	 * @var string
	 */
	public string $dVencimento;
	/**
	 * ID da Conta a Receber ou a Pagar
	 *
	 * @var integer
	 */
	public int $nIdTitulo;
	/**
	 * Número da Parcela
	 *
	 * @var integer
	 */
	public int $nSequencia;
	/**
	 * Valor da parcela
	 *
	 * @var decimal
	 */
	public float $vParcela;
	/**
	 * Percentual da parcela
	 *
	 * @var decimal
	 */
	public float $pParcela;
	/**
	 * Código para o Tipo de Documento.<BR><BR>Valores possíveis: <BR><BR>13S - 13o. Salário<BR>99999 - Outros<BR>ACO - Acordo<BR>ACOB - Acordo - Boleto<BR>ACOT - Acordo - Transferência<BR>ADI - Adiantamento<BR>ANT - Antecipação<BR>APL - Aplicação<BR>APO - Apólice<BR>BIL - Bilhete<BR>BOL - Boleto<BR>BOLV - Boleto à Vista<BR>BONUS - Bonus<BR>CAP - Capitalização<BR>CF - Cupom Fiscal<BR>CHD - Cheque Devolvido<BR>CHP - Cheque Pré<BR>CHQ - Cheque<BR>CHT - Cheque de Terceiros<BR>CNT - Crédito em Conta<BR>COB - Cobrança<BR>COM - Comissão<BR>CON - Convênios<BR>CONC - Cobrança de Concessionária<BR>COND - Condicional<BR>CONS - Consignado<BR>CONSO - Consórcio<BR>CRC - Cartão de Crédito<BR>CRD - Cartão de Débito<BR>CRE - Crediário<BR>CRT - Cartão<BR>CTE - CT-e<BR>CTR - Contrato<BR>CUSJ - Custos Judiciais<BR>DACTE - DACTE<BR>DAE - DAE<BR>DAJE - DAJE<BR>DAM - DAM<BR>DANFE - DANFE<BR>DAR - DAR<BR>DARE - DARE<BR>DARJ - DARJ<BR>DARM - DARM<BR>DAS - DAS<BR>DDA - DDA<BR>DEB - Débito em Conta<BR>DEBA - Débito Automático<BR>DEP - Depósito<BR>DEV - Devolução<BR>DFE - Documento Fiscal Equivalente<BR>DIN - Dinheiro<BR>DLC - Distribuição de Lucros<BR>DNF - Documento não fiscal<BR>DNFSE - DANFSE<BR>DOC - DOC<BR>DPVAT - DPVAT<BR>DRF - DARF<BR>DUA - DUA<BR>DUAM - DUAM<BR>DUP - Duplicata<BR>EMP - Empréstimo<BR>ENC - Encargos<BR>FAT - Fatura<BR>FER - Férias<BR>FIA - Fiado<BR>FIN - Financiamento<BR>FPGT - Folha de Pagamento<BR>GARE - GARE<BR>GNRE - GNRE<BR>GPS - GPS<BR>GRCS - GRCS<BR>GRCSU - GRCSU<BR>GRF - Guia de Recolhimento do FGTS<BR>GRU - GRU<BR>GUIA - Guia de Recolhimento<BR>HOL - Holerite<BR>IMP - Imposto<BR>INV - Invoice<BR>IPTU - IPTU<BR>IPVA - IPVA<BR>JUROS - Juros Limite<BR>MED - Medição<BR>MULTA - Multas<BR>MUTUO - Mútuo<BR>NC - Nota de Crédito<BR>ND - Nota de Débito<BR>NF - Nota Fiscal<BR>NFA - Nota Fiscal de Abastecimento<BR>NFC - Nota Fiscal de Consumidor<BR>NFCE - Nota Fiscal de Consumidor Eletrônica<BR>NFD - Nota Fiscal de Devolução<BR>NFE - Nota Fiscal Eletrônica<BR>NFS - Nota Fiscal de Serviço<BR>NFST - Nota Fiscal de Telecomunicações<BR>PED - Pedido<BR>PEN - Pensão Alimentícia<BR>PER - Permuta<BR>PIX - Pix<BR>PROL - Pro-Labore<BR>PROT - Protesto<BR>PROV - Provisão<BR>REC - Recibo<BR>REE - Reembolso<BR>REND - Rendimentos<BR>RES - Resgate<BR>RET - Rescisão Trabalhista<BR>RPA - RPA<BR>SAQ - Saque<BR>TAR - Tarifa<BR>TED - TED<BR>TFE - Taxa de Fiscalização de Estabelecimentos<BR>TIC - Ticket<BR>TID - Título Descontado<BR>TRA - Transferência<BR>TRAV - Transferência à Vista<BR>TRLAV - Licenciamento<BR>TX - Taxa<BR>VIST - A Vista<BR>VOU - Voucher<BR>WSITE - Website<BR><BR>Listagem completa disponível na API: /api/v1/geral/tiposdoc/
	 *
	 * @var string
	 */
	public string $cTipoDocumento;
	/**
	 * Código da Forma de Pagamento.<BR><BR>Valores possíveis:<BR><BR>01 - Dinheiro<BR>02 - Cheque<BR>03 - Cartão de Crédito<BR>04 - Cartão de Débito<BR>05 - Crédito Loja<BR>10 - Vale Alimentação<BR>11 - Vale Refeição<BR>12 - Vale Presente<BR>13 - Vale Combustível<BR>14 - Duplicata Mercantil<BR>15 - Boleto Bancário<BR>16 - Depósito Bancário<BR>17 - Pagamento Instantâneo (PIX)<BR>18 - Transferência bancária, Carteira Digital<BR>19 - Programa de fidelidade, Cashback, Crédito Virtual.<BR>90 - Sem Pagamento<BR>99 - Outros <BR><BR>Listagem completa disponível na API: /api/v1/geral/meiospagamento/
	 *
	 * @var string
	 */
	public string $cFormaPagamento;
}
